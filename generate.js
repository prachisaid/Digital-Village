let birth = document.getElementById('birth')
let death = document.getElementById('death')
let addForm = document.getElementById('addForm')
let cancel = document.getElementById('Cancel')

addForm.style.display = 'none'

birth.addEventListener('click', function(){
    addForm.style.display = 'block';
})

death.addEventListener('click', function(){
    addForm.style.display = 'block';
})

cancel.addEventListener('click', function(){
    addForm.style.display = 'none'
})