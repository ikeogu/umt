
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });


// window.checkPasswordMatch = function checkPasswordMatch() {
//     password = $("#password").val();
//     confirmPassword = $("#password_confirm").val();

//     if (password != confirmPassword)
//         $("#check").html("Passwords do not match!");
//     else
//         $("#check").html("Passwords match.");
        
// }

// $(document).ready(function () {
	
//   $("#password_confirm").keyup(checkPasswordMatch);
// });

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});



 
   
    // const form = document.querySelector('#register');
    // console.log(form.member.value,form.name.value,form.email.value,form.gender.value,form.osmusername.value,form.department.value,form.joined.value,form.password.value,form.customCheckRegister.value,form.joined_by.value);
    // $.ajax({
    //     type: "POST",
    //     headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     url:"{{route('user_reg')}}",
            
    //     data:{
    //         name:form.name.value,
    //         email:form.email.value,
    //         phone:form.phone.value,
    //         gender:form.gender.value,
    //         osmusername:form.osmusername.value,
    //         department :form.department.value,
    //         member :form.member.value,
    //         joined : form.joined.value,
    //         joined_by:form.joined_by.value,
    //         password: form.password.value,
    //         _token:$('meta[name="csrf-token"]').attr('content'),
    //          agree: form.customCheckRegister.value
    //     },
    //      dataType:'json',
    //     success:function(data, status){
            
    //         console.log(data);
    //         if (status == 'success') {
    //             console.log(data);
    //             element.text("Redirecting..");
    //             var url = data;
    //             window.location = url;
    //         }else{
    //             element.text("Oops, an error found.");
    //             element.removeAttr('disabled');
    //             console.log(data);
    //         }
    //     }    