import styled from "styled-components";
import block from "./darkwaves.png";
import { useState } from "react";

import UserApi from "../../controllers/UserController";
import { useNavigate } from "react-router-dom";

const Login = styled.div`
    .container-div{
        position: relative;
    }
    .box-img{
        background-color: rgb(0 0 0);
        // height: 100%;
        overflow: hidden;
        img{
            opacity: 0.5;
            filter: blur(5px);
            height: 1006px;
            // width: 100%;
        }
    }
    .box-items{
        position: absolute;
        top: 300px;
        width: 100%;
        .name-shop{
            color: #fff;
            display: flex;
            font-size: 24px;
            font-weight: 600;
            justify-content: center;
            text-shadow: 2px 2px 9px #fff;
        }
    }
    .fields{
        display: flex;
        margin-top: 50px;
        align-items: center;
        flex-direction: column;
        .email-field, .password-field{
            display: flex;
            flex-direction: column;
            color: #fff;
        }
        input{
            margin-top: 5px;
            margin-bottom: 20px;
            width: 415px;
            height: 45px;
            background-color: rgb(51, 55, 65);
            border-radius: 5px;
            border: none;
            color: #fff;
            padding-left: 18px;
            padding-right: 18px;
            &:focus-visible{
                outline: black;
            }
        }
        .login-button{
            height: 60px;
            border-radius: 15px;
            border: none;
            background-color: #7b68ee;
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 9px #7b68ee;
            cursor: pointer;
            margin-top: 30px;
            width: 300px;
            align-self: center;
            &:hover{
                transition: all 0.5s ease 0s;
                background-color: #6f57ff;
                text-shadow: 2px 2px 9px #6f57ff;
            }
        }
    }
    @media screen and (max-width: 468px){
        .box-img{
            img{
                // height: 100%;
            }
        }
        .box-items{
            top: 150px;
            .fields{
                .email-field{
                    input{
                        width: 270px;
                    }
                }
                .password-field{
                    input{
                        width: 270px;
                    }
                }
            }
        }
    }
`;

const _Login = (props) => {
    
    const [state, setState] = useState({
        email: '',
        password: ''
    });
    const { email, password } = state;
    const navigate = useNavigate();

    const login = async () => {
        return await UserApi.loginJewelry({ email, password })
            .then((data) => {
                if (data.status == 401) {
                    alert('Usuário inválido');
                }
                else {
                    navigate('/inicio');
                }
            })
            .catch((err) => { throw new Error(err) });
    }
    const onChangeEmail = (e) => setState((prevState) => ({ ...prevState, email: e.target.value }));

    const onChangePassword = (e) => setState((prevState) => ({ ...prevState, password: e.target.value }));

    return (
        <Login>
            <div className="container-div col-sm-12 col-md-12 col-lg-12" >
                <div className="box-img">
                    <img src={block} />
                    <div className="box-items">
                        <span className="name-shop">Assetto</span>
                        <div className="fields">
                            <div className="email-field">
                                <span>Email</span>
                                <input type='text' onChange={onChangeEmail} />
                            </div>
                            <div className="password-field">
                                <span>Senha</span>
                                <input type='password' onChange={onChangePassword} />
                            </div>
                            <button className="login-button" onClick={login}>Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </Login>
    );
}

export default _Login;