
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const d = new Date();
let month = months[d.getMonth()];




document.querySelector('.time').innerHTML=d.getDate()+' '+month+' '+d.getFullYear()  +' '+ d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()

let h = d.getHours()

if( 4 <= h && h < 12 ){
    document.querySelector('.welcome').innerHTML='Good Morning'
    document.getElementById('color-time').style.background='yellow'
}else if ( 12 < h && h <21){
    document.querySelector('.welcome').innerHTML='Good Evening';
    document.getElementById('color-time').style.background='orange'
}else if( 21 < h ) {
    document.querySelector('.welcome').innerHTML='Good Night';
    document.getElementById('color-time').style.background='black'
}else if( 4 > h ){
    document.querySelector('.welcome').innerHTML='Good Night';
    document.getElementById('color-time').style.background='black'
}
