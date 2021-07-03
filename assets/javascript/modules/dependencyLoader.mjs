export class DependencyLoader {
    constructor() {
        this.dependencyList = []
    }
    async load(condition, modulePath) {
        console.log(condition, modulePath);
        return new Promise((resolve, reject) => {
            if(condition) {
                import(modulePath).then(result => {
                    console.log(result);
                    this.loaded = result;
                    resolve(result);
                }).catch(err => {
                    console.log(err);
                })
            }
        })
    }

    selector(selector) {
        return document.querySelectorAll(selector);
    }

    set loaded(module) {
        this.dependencyList.push(module)
    }

    get modules() {
        return this.dependencyList;
    }
}