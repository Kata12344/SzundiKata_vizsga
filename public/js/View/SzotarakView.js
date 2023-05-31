import OpcioView from "./OpcioView.js";
import AngolView from "./AngolView.js";

class SzotarakView{
    constructor(tomb, szuloElem){
        //console.log(tomb)
        szuloElem.append(`
        <div class="container">
        <p class ="cim" >Angol</p>
        <div id="angolSz" class="col-sm"></div>
        <div class="w-100"></div>
        <p class ="cim">Magyar</p>
        <div id="magyarSz" class="col-sm"></div>
        </div>
        `)
        this.divElem = szuloElem.children("div")
        this.AngoldivElemecske = this.divElem.children("#angolSz")
        this.MagyardivElemecske = this.divElem.children("#magyarSz")
        tomb.forEach(elem => {
            new AngolView(elem, this.AngoldivElemecske, this.MagyardivElemecske)
        });
        

    }
}
export default SzotarakView;