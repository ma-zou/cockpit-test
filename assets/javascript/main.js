
import('./modules/dependencyLoader.mjs').then(result => {
    let loader = new result.DependencyLoader();
    
    loader.load(loader.selector('body.index'), './mail.mjs').then(mail => {
        let mailmask = new mail.Mail();
    });

}) 

