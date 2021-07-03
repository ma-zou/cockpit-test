export class Mail {
    constructor(selector) {
		this.selector = selector || '[data-recipient]';
		this.items = document.querySelectorAll(this.selector);
		this.items.forEach(item => {
			item.addEventListener('click', this.handleClick);
		})
	}
	
	handleClick(event) {
		const element = event.target, 
		    link = `mailto:${element.dataset.recipient}@${element.dataset.host}`
			
		window.open(link);
	}
}