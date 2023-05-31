import OpcioView from "./OpcioView.js";

class SelectView{
    #elem;
    constructor(tomb, szuloElem){
        console.log(tomb)
        szuloElem.append(`
        <label for="temak">Válassz egy témát:</label><br><br>
        <select name="temak" id="temak">
        </select>`)
        this.selectElem = szuloElem.children("select");
        tomb.forEach((opcio) => {
            const opciom = new OpcioView(opcio, this.selectElem);
        });
    }
    
}

export default SelectView;