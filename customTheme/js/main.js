const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const mobileMenuContainer = document.querySelector('.mobile-menu-container');
const tabBox = document.querySelectorAll('.tab_box');





function openTabBox(event) {
    const height = (this.children[1].children.length + 1) * 50
    console.log(height)
    console.log(this.children[1].children.length);

    this.classList.toggle('h-[50px]');
    // this.classList.toggle(`h-[${height}px]`)
    this.classList.toggle(`h-[400px]`)


}

tabBox.forEach(box => {
    box.addEventListener('click', openTabBox)
})


const handleMobileBtnClick = () => {


    if (mobileMenuBtn.classList.contains('fa-bars')) {
        mobileMenuBtn.classList.remove('fa-bars');
        mobileMenuBtn.classList.add('fa-times');
        mobileMenuContainer.classList.remove('hidden')
    } else {
        mobileMenuBtn.classList.remove('fa-times');
        mobileMenuBtn.classList.add('fa-bars');
        mobileMenuContainer.classList.add('hidden')
    }


}

mobileMenuBtn.addEventListener('click', handleMobileBtnClick)
addEventListener("resize", (event) => {
    if (window.innerWidth > 767) {
        mobileMenuBtn.classList.remove('fa-times');
        mobileMenuBtn.classList.add('fa-bars');
        mobileMenuContainer.classList.add('hidden')
    }
});


// FILTER BOX
const filtersBox = document.querySelector('.filters_container');
const filterBtn = document.querySelector('.filter_btn');
const carsContainer = document.querySelector('.cars_container');
const filterBtnIcon = document.querySelector('.filter_btn_icon');

let isFilterBoxOpen = false;

function handleFilterBtn() {
    if (isFilterBoxOpen) {
        isFilterBoxOpen = false;
        filtersBox.classList.add('hidden');
        carsContainer.classList.add('w-full');
        carsContainer.classList.remove('pl-[200px]');
        filtersBox.classList.remove('w-[200px]');
        filterBtnIcon.classList.add('fa-arrow-right');
        filterBtnIcon.classList.remove('fa-arrow-left');
    } else {
        isFilterBoxOpen = true;
        filtersBox.classList.remove('hidden');
        carsContainer.classList.remove('w-full');
        carsContainer.classList.add('pl-[200px]');  // Ensure correct class is added
        filterBtnIcon.classList.remove('fa-arrow-right');
        filterBtnIcon.classList.add('fa-arrow-left');
    }
}

filterBtn.addEventListener('click', handleFilterBtn);


