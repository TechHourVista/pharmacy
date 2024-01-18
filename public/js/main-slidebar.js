

let btn1 = document.getElementById('btn1')
let ul1 = document.getElementById('ul_1')
let vector1 = document.getElementById('vector1')
let condition1 = 'hide'

btn1.addEventListener('click',function(){
    if( condition1 === 'show'){
        ul1.style.display='none'
        vector1.style.transform=' rotate(0deg)'
        condition1 = 'hide'

        
    }else if (condition1 === 'hide'){
        ul1.style.display='block'
        condition1 = 'show'
        vector1.style.transform=' rotate(180deg)'
 
      
    }
}) 



let btn2 = document.getElementById('btn2')
let ul2 = document.getElementById('ul_2')
let vector2 = document.getElementById('vector2')
let condition2 = 'hide'

btn2.addEventListener('click',function(){
    if( condition2 === 'show'){
        ul2.style.display='none'
        vector2.style.transform=' rotate(0deg)'
        condition2= 'hide'

    }else if (condition2 === 'hide'){
        ul2.style.display='block'
        condition2 = 'show'
        vector2.style.transform=' rotate(180deg)'
    }
}) 




//active li 
// let links_slide = document.querySelectorAll('.links-slide')


// links_slide.forEach(item=>{
//    item.addEventListener('click',function(){
//     links_slide.forEach(e=>{
//         e.classList.remove('select')
//     })
//     item.classList.add('select')
//    })

// })




let btnHideSlide = document.querySelector('.btn-hide-slide')
let vector = document.getElementById('btn-hide-slide')
let header = document.querySelector('section')
let condition = 'show'

btnHideSlide.addEventListener('click',function(){
    if( condition === 'show'){
        header.style.display='none'
        vector.style.transform=' rotate(-90deg)'
        btnHideSlide.style.left='0px'
        condition= 'hide'
        document.querySelector('body').style.gridTemplateAreas=` "header header header header"
        "main main main  main"
        "main main main  main"
        "main main main  main"
        "main main main  main"
        `

    }else if (condition === 'hide'){
        header.style.display='block'
        condition = 'show'
        btnHideSlide.style.left='256px'
        vector.style.transform=' rotate(90deg)'
        document.querySelector('body').style.gridTemplateAreas=` "header header header header"
        "side main main  main"
        "side main main  main"
        "side main main  main"
        "side main main  main"
        `
    }
}) 