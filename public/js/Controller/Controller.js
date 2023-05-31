import AdatModel from "../Model/AdatModel.js";
import SelectView from "../View/SelectView.js";
import SzotarakView from "../View/SzotarakView.js";


class Controller{
    constructor(){
        const token = $('meta[name="csrf-token"]').attr("content");
        const adatmodel = new AdatModel(token);

        adatmodel.adatBe("/tema", this.adatok2);
        adatmodel.adatBe("/szavak", this.adatok);
    }
    adatok(tomb){
        const szuloElem = $('aside');
        new SzotarakView(tomb, szuloElem)
    }
    adatok2(tomb){
        const szuloElem = $('article');
        new SelectView(tomb, szuloElem)
    }
}

export default Controller;
