/**
 * Created by isida on 07.05.2019.
 */

class Menu{
    constructor(menuComponents){
        this._menuBar = $(`.${menuComponents.menuBar}`);
        this._menuBarCatalog = $(`.${menuComponents.menuBarCatalog}`);
        this._widthControlHandler();
    }

    run(){
        $(window).on('resize.Menu', $.proxy(this._widthControlHandler, this));
    }
    _widthControlHandler(){
        let currentMenuBarCatalogWidth = this._menuBarCatalog.width();
        this._menuBar.css('width',`${currentMenuBarCatalogWidth}px`);
    }
}
export {Menu};