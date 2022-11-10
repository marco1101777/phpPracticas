const  $ = sel => document.querySelector(sel) , id = ID  => document.getElemenById(ID), $$ = sel => document.querySelectorAll(sel)

let ok = true  ;  

let input = $$("#pass");
 

let btn_pass = $('#btn_pass')  ; 
btn_pass.addEventListener('click' , (e) =>{
        e.preventDefault()  ;
        input[0].type  = (ok  ?  "text"  : "password")  ;
        input[1].type  = (ok  ?  "text"  : "password")  ;

        ok = !ok  ;
});


let btn_ver = $('#ver') ; 
btn_ver.addEventListener('click'  , (e) => {
        e.preventDefault(); 
        window.location.assign("tabla.php")


});

