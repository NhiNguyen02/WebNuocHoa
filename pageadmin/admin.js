var staff=document.getElementById("admin_staff");
var calendar=document.getElementById("admin_calendar");
var users=document.getElementById("admin_user");
var products=document.getElementById("admin_product");
var order=document.getElementById("admin_order");
var warehouse=document.getElementById("admin_warehouse");
var backgroundadmin=document.getElementById("backgroundadmin");
var megaphone=document.getElementById("admin_megaphone");
staff.style.display="none";
calendar.style.display="none";
users.style.display="none";
products.style.display="none";
order.style.display="none";
warehouse.style.display="none";
megaphone.style.display="none";
document.getElementById("tabadmin_staff").addEventListener("click", function(){
    staff.style.display="block";
    calendar.style.display="none";
    users.style.display="none";
    products.style.display="none";
    order.style.display="none";
    warehouse.style.display="none";
    megaphone.style.display="none";
    backgroundadmin.style.display="none";
})
document.getElementById("tabadmin_calendar").addEventListener("click", function(){
    staff.style.display="none";
    calendar.style.display="block";
    users.style.display="none";
    products.style.display="none";
    order.style.display="none";
    warehouse.style.display="none";
    megaphone.style.display="none";
    backgroundadmin.style.display="none";
})
document.getElementById("tabadmin_user").addEventListener("click", function(){
    staff.style.display="none";
    calendar.style.display="none";
    users.style.display="block";
    products.style.display="none";
    order.style.display="none";
    warehouse.style.display="none";
    megaphone.style.display="none";
    backgroundadmin.style.display="none";
})
document.getElementById("tabadmin_product").addEventListener("click", function(){
    staff.style.display="none";
    calendar.style.display="none";
    users.style.display="none";
    products.style.display="block";
    order.style.display="none";
    warehouse.style.display="none";
    megaphone.style.display="none";
    backgroundadmin.style.display="none";
})
document.getElementById("tabadmin_order").addEventListener("click", function(){
    staff.style.display="none";
    calendar.style.display="none";
    users.style.display="none";
    products.style.display="none";
    order.style.display="block";
    warehouse.style.display="none";
    megaphone.style.display="none";
    backgroundadmin.style.display="none";
})
document.getElementById("tabadmin_warehouse").addEventListener("click", function(){
    staff.style.display="none";
    calendar.style.display="none";
    users.style.display="none";
    products.style.display="none";
    order.style.display="none";
    warehouse.style.display="block";
    megaphone.style.display="none";
    backgroundadmin.style.display="none";
})
document.getElementById("tabadmin_megaphone").addEventListener("click", function(){
    staff.style.display="none";
    calendar.style.display="none";
    users.style.display="none";
    products.style.display="none";
    order.style.display="none";
    warehouse.style.display="none";
    megaphone.style.display="block";
    backgroundadmin.style.display="none";
})
var modal = document.getElementById("myModal");
var contentModal = document.getElementById("contentModal");
var btns=[document.getElementById("openModal1"),document.getElementById("openModal2"),document.getElementById("openModal3"),document.getElementById("openModal4"), document.getElementById("editcalendar")];
var form = document.getElementById("myForm");
btns.forEach(function(btn, index) {
    btn.onclick = function() {
        modal.style.display = "block";
        contentModal.innerHTML="<span class=\"close\">&times;</span><br>";
        contentModal.innerHTML += contents[index];
        contentModal.style.animation = "righttoleft ease 2s";  
        var span =document.getElementsByClassName("close")[0];
        span.onclick = function() {
            contentModal.style.animation = "lefttorifht ease 2s";
            contentModal.addEventListener('animationend', function() {
                modal.style.display = "none";
            },{ once: true });
        }

//         const capacityInput = document.getElementById("capacity")
// const additionalFields = document.getElementById("addFields")
// document.getElementById("createrow").addEventListener("click",function(){
//     const capacityValue = parseInt(capacityInput.value);
//     additionalFields.innerHTML = "";
//     for(i=0;i<capacityValue;i++){
//         const lable1 = document.createElement('label')
//         // const lable2 = document.createElement('label')
//         const input1 = document.createElement("input")
//         // const input2 = document.createElement("input")
//         const temp1 = document.createElement("div")
//         // const temp2 = document.createElement("div")
//         temp1.innerHTML = "";
//         // temp2.innerHTML = "";
//         lable1.setAttribute("for", `capacity-${i}`)
//         // lable2.setAttribute("for", `quantity-${i}`)
//         lable1.textContent= "Dung tích " + (i+1) +":";
//         // lable2.textContent= "Số lượng:"
//         input1.setAttribute("id", `capacity-${i}`)
//         // input2.setAttribute("id", `quantity-${i}`)
//         console.log('first', lable1)
//         console.log('lable1', input1)
//         // console.log('first', lable2)
//         // console.log('lable1', input2)
//         temp1.appendChild(lable1)
//         temp1.appendChild(input1)
//         // temp2.appendChild(lable2)
//         // temp2.appendChild(input2)
//         additionalFields.appendChild(temp1)
//         // additionalFields.appendChild(temp2)
    //  }
    
// })
        
    };
}); // Chọn phần tử đầu tiên trong HTMLCollection





window.onclick = function(event) {
  if (event.target == modal) {
      contentModal.style.animation = "lefttorifht ease 2s";
    contentModal.addEventListener('animationend', function() {
        modal.style.display = "none";
    },{ once: true });
  }
}
const capacityInput = document.getElementById("capacity")
const additionalFields = document.getElementById("addFields")
// document.getElementById("createrow").addEventListener("click",function(){
//     const capacityValue = parseInt(capacityInput.value);
//     additionalFields.innerHTML = "";
//     for(i=0;i<capacityValue;i++){
//         const lable1 = document.createElement('label')
//         // const lable2 = document.createElement('label')
//         const input1 = document.createElement("input")
//         // const input2 = document.createElement("input")
//         const temp1 = document.createElement("div")
//         // const temp2 = document.createElement("div")
//         temp1.innerHTML = "";
//         // temp2.innerHTML = "";
//         lable1.setAttribute("for", `capacity-${i}`)
//         // lable2.setAttribute("for", `quantity-${i}`)
//         lable1.textContent= "Dung tích " + (i+1) +":";
//         // lable2.textContent= "Số lượng:"
//         input1.setAttribute("id", `capacity-${i}`)
//         // input2.setAttribute("id", `quantity-${i}`)
//         console.log('first', lable1)
//         console.log('lable1', input1)
//         // console.log('first', lable2)
//         // console.log('lable1', input2)
//         temp1.appendChild(lable1)
//         temp1.appendChild(input1)
//         // temp2.appendChild(lable2)
//         // temp2.appendChild(input2)
//         additionalFields.appendChild(temp1)
//         // additionalFields.appendChild(temp2)
//     }
    
// })

document.addEventListener('DOMContentLoaded', function() {
    var trashIcons = document.querySelectorAll('.fa-trash');
    trashIcons.forEach(function(trashIcon) {
        trashIcon.addEventListener('click', function() {
            var confirmation = confirm('Bạn có chắc chắn xóa hàng này không?');
            if (confirmation) {
                // Thực hiện hành động xóa ở đây
                var row = this.closest('tr');
                if (row) {
                    row.remove();
                }
            }
        });
    });
});
var edits=[document.querySelectorAll(".editstaff"), document.querySelectorAll(".editproduct"),document.querySelectorAll(".editwarehouse"),document.querySelectorAll(".editmegaphone")];
edits.forEach(function(edit1,index) {
    edit1.forEach(function(edit2){
        edit2.onclick = function() {
            const masp = this.getAttribute('data-masp');
            const mota = this.getAttribute('data-mota');
            const tensp = this.getAttribute('data-tensp');
            const makho = this.getAttribute('data-makho');
            const image01 = this.getAttribute('data-image01');
            const image02 = this.getAttribute('data-image02');
            const image03 = this.getAttribute('data-image03');
            const image04 = this.getAttribute('data-image04');
            const thuonghieu = this.getAttribute('data-thuonghieu');
            const dungtich = this.getAttribute('data-dungtich');
            const giaban = this.getAttribute('data-giaban');
            const soluong = this.getAttribute('data-soluong');

            modal.style.display = "block";
            contentModal.innerHTML="<span class=\"close\">&times;</span><br>";
            contentModal.innerHTML += updatecontents[index];
            contentModal.style.animation = "righttoleft ease 2s";  
            var span =document.getElementsByClassName("close")[0];
            span.onclick = function() {
                contentModal.style.animation = "lefttorifht ease 2s";
                contentModal.addEventListener('animationend', function() {
                    modal.style.display = "none";
                },{ once: true });
            }
            console.log( document.querySelector('#masp'), masp)
            document.querySelector('#masp').value = masp;
            document.querySelector('#mota').value = mota;
            document.querySelector('#tensp').value = tensp;
            document.querySelector('#makho').value = makho;
            document.querySelector('#image01').value = image01;
            document.querySelector('#image02').value = image02;
            document.querySelector('#image03').value = image03;
            document.querySelector('#image04').value = image04;
            document.querySelector('#thuonghieu').value = thuonghieu;
            document.querySelector('#capacity').value = dungtich;
            document.querySelector('#giaban').value = giaban;
            document.querySelector('#soluong').value = soluong;
        };
    })
}); // Chọn phần tử đầu tiên trong HTMLCollection