// const selectBtn = document.querySelector(".select-btn"),
//       items = document.querySelectorAll(".item");

// selectBtn.addEventListener("click", () => {
//     selectBtn.classList.toggle("open");
// });

// items.forEach(item => {
//     item.addEventListener("click", () => {
//         item.classList.toggle("checked");

//         let checked = document.querySelectorAll(".checked"),
//             btnText = document.querySelector(".btn-text");

//             if(checked && checked.length > 0){
//                 btnText.innerText = `${checked.length} Selected`;
//             }else{
//                 btnText.innerText = "Select Language";
//             }
//     });
// })

$(document).ready(function() {
    $('.select2').select2(
        {
            placeholder: "Select Languages",
            allowClear: true
        }
    );
});

document.getElementById('addEducation').addEventListener('click', function () {
    const educationContainer = document.getElementById('educationContainer');
    const newEducationEntry = document.querySelector('#edu-box');
    console.log(newEducationEntry.innerHTML);
    educationContainer.innerHTML = educationContainer.innerHTML + newEducationEntry.innerHTML;
});





