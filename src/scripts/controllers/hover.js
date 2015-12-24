export default class Hover {
    constructor(hoverClass = 'hover') {
        this.hover = $('.' + hoverClass);
        this.backButton = this.hover.find('.close-button');
        this.backStack = [];
    }
    
    open(which = 0) {
        let that = this;
        this.hover.find('.products').removeClass('show');
        this.hover.find('.info').removeClass('show');
        
        this.hover.find('.products[data_id=' + which + ']').addClass('show');
         galleryCtrl.refresh(which);
        
        this.state = 'OPEN';
        viewportCtrl.scrollTo($('.section.products'), .5);
        this.hover.addClass('open');
        setTimeout(function() {
            $('body').addClass('hoverOpen');
        }, 500);
    }
    
    openInfo(which){
        let that = this;
        let info = this.hover.find('.info');
        info.attr('data_id', which.closest('.products').attr('data_id'));
        info.find('.title').html(which.attr('data_title'));
        info.find('.caption').html(which.attr('data_caption'));
        
        info.find('.image').html('');
        let thumbnails = $('<div class="thumbnails"></div>');
        
        for(let i = 0; true; i++) {
            if(which.attr('data_image' + i) == null ) {
                break;
            } else {
                if(i == 0) {
                    info.find('.image').append('<img src="' + which.attr('data_image' + i) + '"></img>');
                }
                let a = $('<a class="thumbnail" href="' + which.attr('data_image' + i) + '" data-lightbox="' + info.attr('data_id') + '"></a>')
                a.css('background-image', 'url(' + which.attr('data_image' + i) + ')');
                thumbnails.append(a);
            }
        }
        
        info.find('.image').append(thumbnails);
        
        info.find('.description').html('');
        for(let i = 0; true; i++) {
            if(which.attr('data_description' + i) == null ) {
                break;
            } else {
                let paragraph = $('<p></p>').html(which.attr('data_description' + i));
                info.find('.description').append(paragraph);
            }
        }
        
        this.addToBack(function() {
            that.closeInfo();
        });
        
        setTimeout(function() {
            that.backButton.addClass('infoStyle');
            info.addClass('show');
        }, 200);
        
        setTimeout(function() {
            $('.products').removeClass('show');
        }, 300);
        
        require('../libraries/lightbox');
    }
    
    closeInfo() {
        let that = this;
        let info = this.hover.find('.info');
        let dataId = info.attr('data_id');
        let products = this.hover.find('.products[data_id=' + dataId + ']');
        
        products.addClass('show');
        
        setTimeout(function() {
            that.backButton.removeClass('infoStyle');
            info.removeClass('show');
        }, 200);
    }
    
    addToBack(doThis) {
        this.backStack.push(doThis);
    }
    
    back() {
        if(this.backStack.length > 0) {
            this.backStack[this.backStack.length - 1]();
            this.backStack.pop();
        } else {
            this.close();
        }
    }
    
    close() {
        let that = this;
        this.state = 'CLOSE';
        $('body').removeClass('hoverOpen');
        $(window).scrollTop($('.section.products').offset().top);
        this.hover.removeClass('open');
        this.backStack = [];
        
        setTimeout(function() {
            that.hover.find('.info').removeClass('show');
            that.hover.find('.products').removeClass('show');
        }, 500);
    }
    
    toggleState() {
        if(this.state == 'OPEN') {
            this.close();
        } else {
            this.open();
        }
    }
    
    getState() {
        return this.state;
    }
}