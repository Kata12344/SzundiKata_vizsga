class AngolView{
    constructor(elem, szuloElem1, szuloElem2){
        //console.log(elem)
        szuloElem1.append(`
            <div class="row">${elem.angol}</div>
            
        `)
        szuloElem2.append(`
        <div class="row">
            <input type="text" id="magyar${elem.id}" name="magyar">
        </div>
        `)
        $("input").change(function(){
            if (("#magyar${elem.id}").value ==("${elem.angol}")) {
                console.log("jóóó")
            }
        });
    }

    
}
function ellenoriz(){
    if (("input").valueOf ==("${elem.angol}")) {
        console.log("jóóó")
    }
}
export default AngolView;