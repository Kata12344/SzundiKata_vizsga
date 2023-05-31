class OpcioView{
    constructor(elem, szuloElem){
        console.log(elem)
        var szak_ertek = elem.id
        szuloElem.append(`
        <option id="opcio" value="${szak_ertek}">${elem.temanev}</option>
        `)
        this.opcioElem = szuloElem.children("option");
    }
}

export default OpcioView;
