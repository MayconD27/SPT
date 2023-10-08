document.getElementById('add').addEventListener('click',()=>{
    let campo = document.getElementById('campo');
    let select = document.getElementById('select');
    let list = [];
    const ops = [...select.options];
    ops.forEach((o)=>{
        list.push(o.value);
    })
    let form = '<div class="card"> <input type="file" name="arq1">'+
    '<select name="">';
    i=0;
    while(i<list.length){
    form+=`<option value="${list[i]}">${list[i]}</option>`;
    i++;
    }
    form+= '</div>';

    campo.innerHTML += form;

})