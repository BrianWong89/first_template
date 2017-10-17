var vm = new Vue({
    //Second thing, make sure you define the container or row as app
    el: '#app',
    //First thing, mounted here executes whatever commands you want when Vue.js has been loaded.
    mounted: function () {
        // GET /someUrl
        this.$http.get('post.php').then(response => {
            // success callback
        }, response => {
            // error callback
        });
    },
    data: {
        name: "",
        email: "",
        message: "",
        showWarningMessage: false,
        showSuccessMessage: false
    },
    created: function () {
        // `this` points to the vm instance
    },
    methods: {
        pressSubmitBtn: function () {
            // GET /someUrl
            var post_fields = {
                "name":$("#name").val(),
                "email":$("#email").val(),
                "message":$("#message").val()
            };
            this.$http.post('post.php',
                post_fields
            ).then(response => {
                // success callback
                //console.log(response);
                if (response.body.success === true){
                this.showSuccessMessage = true;
            } else {
                this.showWarningMessage = true;
            }
        }, response => {
                // error callback
            })
        }
    },
    watch: {
        showSuccessMessage: function (value) {
            alert("Show Success Message has been changed to " + value);
        },
        name: function (value) {
            alert("Name has been changed to " + value);
        }
    }
});