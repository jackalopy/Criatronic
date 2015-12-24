import dragdealer from 'dragdealer';
let Dragdealer = dragdealer.Dragdealer;

export default class Gallery {
    constructor(galleryClass = '.hover .products.mobile-only') {
        this.galleryClass = galleryClass;
        this.initMobile();
        this.initDesk();
    }
    
    initMobile() {
        let that = this;
        let galleries = $(this.galleryClass);
        this.galleries = galleries;
        this.draggers = [];
        
        galleries.each(function() {
            that.initMobileUnit($(this));
        });
    }
    
    initDesk() {}
    
    initMobileUnit(which) {
        let dragger = new Dragdealer(which.attr('id'), {
            steps: which.find('.product').length,
            speed: 0.3,
            loose: true,
            requestAnimationFrame: true,
            callback: function(x,y) {
                let step = dragger.getStep()[0];
                which.parent().find('.buttons').find('.button').each(function() {
                    if($(this).attr('value') == step) {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                });
            }
        });
        
        this.draggers.push(dragger);
    }
    
    refresh(which = 0) {
        let dragger = this.draggers[which]
        which = $(this.galleries[which]);
        
        which.parent().find('.buttons').remove();
        let buttons = $('<div class="buttons mobile-only"></div>');
        let galleryLength = which.find('.product').length;
        for(var i = 1; i <= galleryLength; i++) {
            let button = $('<div class="button button' + i + (i == 1? ' active' : '' ) + '" value="' + i +'"></div>');
            button.on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                dragger.setStep($(this).attr('value'));
            });
            buttons.append(button);
        }
        
        which.parent().append(buttons);
        
        dragger.reflow();
        
        setInterval(function() {
            dragger.reflow();
        }, 1500);
        
    }
}