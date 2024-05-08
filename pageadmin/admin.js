const capacityInput = document.getElementById("capacity")
const additionalFields = document.getElementById("addFields")
capacityInput.addEventListener("change",function(){
    const capacityValue = parseInt(capacityInput.value);
    additionalFields.innerHTML = "";
    for(i=0;i<capacityValue;i++){
        const lable1 = document.createElement('label')
        const lable2 = document.createElement('label')
        const input1 = document.createElement("input")
        const input2 = document.createElement("input")
        lable1.setAttribute("for", `capacity-${i}`)
        lable2.setAttribute("for", `quantity-${i}`)
        lable1.textContent= "Dung tích:"
        lable2.textContent= "Số lượng:"
        input1.setAttribute("id", `capacity-${i}`)
        input2.setAttribute("id", `quantity-${i}`)
        console.log('first', lable1)
        console.log('lable1', input1)
        console.log('first', lable2)
        console.log('lable1', input2)
        additionalFields.appendChild(lable1)
        additionalFields.appendChild(input1)
        additionalFields.appendChild(lable2)
        additionalFields.appendChild(input2)
    }
})
const staff = document.getElementById("admin_staff")
const calendar = document.getElementById("admin_calendar")
const user = document.getElementById("admin_user")
const product = document.getElementById("admin_product")
const order = document.getElementById("admin_order")
const warehouse = document.getElementById("admin_warehouse")
const megaphone = document.getElementById("admin_megaphone")
staff.style.display = "block"
calendar.style.display = "none"
user.style.display = "none"
product.style.display = "none"
order.style.display = "none"
warehouse.style.display = "none"
megaphone.style.display = "none"

document.getElementById("tabadmin_staff").addEventListener("click", function(){
    staff.style.display = "block"
    calendar.style.display = "none"
    user.style.display = "none"
    product.style.display = "none"
    order.style.display = "none"
    warehouse.style.display = "none"
    megaphone.style.display = "none"
})
document.getElementById("tabadmin_calendar").addEventListener("click", function(){
    staff.style.display = "none"
    calendar.style.display = "block"
    user.style.display = "none"
    product.style.display = "none"
    order.style.display = "none"
    warehouse.style.display = "none"
    megaphone.style.display = "none"
})
document.getElementById("tabadmin_user").addEventListener("click", function(){
    staff.style.display = "none"
    calendar.style.display = "none"
    user.style.display = "block"
    product.style.display = "none"
    order.style.display = "none"
    warehouse.style.display = "none"
    megaphone.style.display = "none"
})
document.getElementById("tabadmin_product").addEventListener("click", function(){
    staff.style.display = "none"
    calendar.style.display = "none"
    user.style.display = "none"
    product.style.display = "block"
    order.style.display = "none"
    warehouse.style.display = "none"
    megaphone.style.display = "none"
})
document.getElementById("tabadmin_order").addEventListener("click", function(){
    staff.style.display = "none"
    calendar.style.display = "none"
    user.style.display = "none"
    product.style.display = "none"
    order.style.display = "block"
    warehouse.style.display = "none"
    megaphone.style.display = "none"
})
document.getElementById("tabadmin_warehouse").addEventListener("click", function(){
    staff.style.display = "none"
    calendar.style.display = "none"
    user.style.display = "none"
    product.style.display = "none"
    order.style.display = "none"
    warehouse.style.display = "block"
    megaphone.style.display = "none"
})
document.getElementById("tabadmin_megaphone").addEventListener("click", function(){
    staff.style.display = "none"
    calendar.style.display = "none"
    user.style.display = "none"
    product.style.display = "none"
    order.style.display = "none"
    warehouse.style.display = "none"
    megaphone.style.display = "block"
})
function checkAll(){
    const checkAll = document.getElementById("checkAll")
    const check = document.getElementsByClassName("check")
    if(checkAll.checked==true)
    {
        for (let i = 0; i < check.length; i++) {
            check[i].checked = true;
        }
    }else{
        for (let i = 0; i < check.length; i++) {
            check[i].checked = false
        }
    }
}
var modal = document.getElementById("myModal");
var contentModal = document.getElementById("contentModal");
var btn = document.getElementById("openModal");
var span = document.getElementsByClassName("close")[0];
var form = document.getElementById("myForm");

btn.onclick = function() {
  modal.style.display = "block";
  contentModal.style.animation = "righttoleft ease 2s";
}

span.onclick = function() {
    contentModal.style.animation = "lefttorifht ease 2s";
    contentModal.addEventListener("animationend", function() {
        modal.style.display = "none";
    });
}

window.onclick = function(event) {
  if (event.target == modal) {
    contentModal.style.animation = "lefttorifht ease 2s";
    contentModal.addEventListener("animationend", function() {
        modal.style.display = "none";
    });
    
  }
}

// form.onsubmit = function(event) {
//   event.preventDefault(); // Prevent form submission
//   // Handle form submission logic here
//   modal.style.display = "none"; // Close modal after form submission
// }