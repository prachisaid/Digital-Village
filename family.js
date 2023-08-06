let btn = document.getElementById('mem');
let memberform = document.getElementById('addForm')
memberform.style.display = 'none'

btn.addEventListener('click', function(e){
    memberform.style.display = 'block'
})