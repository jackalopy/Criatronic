export default class Menu {
    constructor(menuClass = 'menu', menuButton = 'menu-btn', toSectionClass = 'toSection', sectionClass = 'section') {
        this.menuClass = menuClass;
        this.menuButtonClass = menuButton;
        this.toSectionClass = toSectionClass;
        this.sectionClass = sectionClass;
        this.state;
        this.init();
    }
    
    init() {
        let that = this;
        this.menu = $('.' + this.menuClass);
        this.menuButton = $('.' + this.menuButtonClass);
        this.sections = $('.' + this.sectionClass);
        this.sectionsLength = this.sections.length;
        
        let links = this.menu.find('.links');
        
        for(let i = 0; i < this.sectionsLength; i++) {
            let link = $('<li class="link ' + this.toSectionClass + '" menu_value="' + (i + 1) + '"></li>');
            link.text($('#' + this.sectionClass + (i + 1)).attr('menu_title'));
            
            links.append(link);
        }
        
        this.menuButton.on('click', function() {
            that.toggleState();
        });
        
        this.close();
    }
    
    open() {
        this.state = "OPEN";
        this.menu.addClass('open');
        this.menuButton.addClass('active');
    }
    
    close() {
        this.state = "CLOSE";
        this.menu.removeClass('open');
        this.menuButton.removeClass('active');
    }
    
    toggleState() {
        switch(this.state) {
            case "OPEN":
                this.close();
                break;
            case "CLOSE":
                this.open();
                break;
        }
    }
    
    getState() {
        return this.state;
    }
};