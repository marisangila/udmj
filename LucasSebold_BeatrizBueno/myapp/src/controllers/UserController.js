import $ from 'jquery';

export default class UserApi {

    static loginJewelry(user) {
        return new Promise((resolve, reject) => {
            const data = {
                Email: user.email,
                Password: user.password
            }
            var formData = new FormData();
            formData.append("user", user);
            $.ajax({
                type: "POST",
                url: 'http://localhost:5045/login',
                data: JSON.stringify(data),
                contentType: 'application/json',
                processData: false,
                dataType: 'json',
                complete: (data) => resolve(data),
                error: (error) => {
                    console.log(error)
                    reject(true);
                },
            });
        });
    }
}

