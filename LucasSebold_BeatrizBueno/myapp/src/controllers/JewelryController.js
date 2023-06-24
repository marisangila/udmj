import $ from 'jquery';

export default class JewelryApi {

    static Jewelries() {
        return new Promise((resolve, reject) => {
            $.get('http://localhost:5045/api/Jewelry', data => resolve(data))
                .fail((error) => {
                    console.log(error)
                    reject(true);
                });
        })
    }

    static createJewelry(jewelry) {
        return new Promise((resolve, reject) => {
            const data = {
                JewelryName: jewelry.jewelryName,
                JewelryPrice: jewelry.jewelryPrice,
            }
            var formData = new FormData();
            formData.append("jewelry", jewelry);
            $.ajax({
                type: "POST",
                url: 'http://localhost:5045/api/Jewelry',
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

    static loginJewelry(jewelry) {
        return new Promise((resolve, reject) => {
            const data = {
                Email: jewelry.email,
                Password: jewelry.password
            }
            var formData = new FormData();
            formData.append("jewelry", jewelry);
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

    static updateJewelry(id, jewelry) {
        return new Promise((resolve, reject) => {
            const data = {
                jewelryId: jewelry.jewelryId,
                JewelryName: jewelry.jewelryName,
                JewelryPrice: jewelry.jewelryPrice,
                material: jewelry.jewelryMaterial,
                gender: jewelry.jewelryGender
            }
            var formData = new FormData();
            formData.append("jewelry", jewelry);
            $.ajax({
                type: "PUT",
                url: `http://localhost:5045/api/Jewelry/${id}`,
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

    static removeJewelry(id) {
        return new Promise((resolve, reject) => {
            $.ajax({
                type: "DELETE",
                url: `http://localhost:5045/api/Jewelry/${id}`,
              //  data: JSON.stringify(data),
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

