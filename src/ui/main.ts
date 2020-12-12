class App {
    public mainMenuOpen = false;
    private DOM = {
        element: (selector: string) => this.getElement(selector),
        get navigationMenu() {
            return this.element('navigation-menu');
        },
        get navigationMenuLink() {
            return this.element('navigation-menu--link');
        },
        get navigationMenuBurger() {
            return this.element('navigation-menu--burger');
        },
    };

    private toggleOpenClass(element: Element, open: boolean) {
        this.toggleClass(element, 'open', open);
        this.toggleClass(element, 'close', !open);
    }

    private getElement(selector: string): Element {
        return document.querySelector('[oxum__' + selector + ']');
    }

    public init(): void {
        this.addDomActions();
    }

    public toggleClass(element: Element, className: string, enable: boolean) {
        if (element) {
            element.classList[enable ? 'add' : 'remove'](className);
        }
    }

    public openMainMenu() {
        if (this.DOM.navigationMenuLink) {
            this.mainMenuOpen = !this.mainMenuOpen;
            this.toggleOpenClass(this.DOM.navigationMenu, this.mainMenuOpen);
            this.toggleOpenClass(this.DOM.navigationMenuBurger, this.mainMenuOpen);
        }
    }

    public addDomActions() {
        this.DOM.navigationMenuLink.addEventListener('click', this.openMainMenu.bind(this));
        this.DOM.navigationMenuBurger.addEventListener('click', () => {
            this.toggleClass(this.DOM.navigationMenuBurger, 'open', this.mainMenuOpen);
            this.toggleClass(this.DOM.navigationMenuBurger, 'close', !this.mainMenuOpen);
        });
        this.DOM.navigationMenu.addEventListener('transitionend', () => {

        });
    }
}

window.onload = () => {
    new App().init();
};