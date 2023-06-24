import React from "react";
import logo from "./logo.png";
import styled from "styled-components";
import _Header from "../header/_Header";

const Help = styled.div`
    .container-div{
        display: flex;
        align-items: center;
        width: 100%;
        height: 969px;
        padding: 0px 50px;
        justify-content: center;
        background-color: black;
        .border-text{
            display: flex;
            align-items: center;
            padding: 10px 30px;
            justify-content: center;
            border: 1px solid #7b68ee;
        }
        .img-box{
            img{
                width: 100%;
            }
        }
    }   
    .text-box{
        display: flex;
        margin-left: 15px;
        flex-direction: column;
        span{
            color: #fff;
        }
        .text-item{
            display: flex;
            flex-direction: column;
            padding-bottom: 10px;
            .text-email{
                padding-top: 10px;
            }
        }
        .text-principal{
            span{
                font-size: 32px;
            }
        }
    }
    @media screen and (max-width: 468px){
        .container-div{
            align-items: start;
            padding-top: 165px;
        }
    }
`;

const _Help = () => {
    return (
        <Help>
            <_Header />
            <div className="container-div">
                <div className="border-text col-sm-12 col-md-12 col-lg-12">
                    <div className="img-box">
                        <img src={logo} />
                    </div>
                    <div className="text-box">
                        <div className="text-principal">
                            <span>Contato</span>
                        </div>
                        <div className="text-item">
                            <span className="text-email">Email</span>
                            <span>assetoCompany@gmail.com</span>
                        </div>
                        <div className="text-item">
                            <span>WhatsApp</span>
                            <span>{'+55 (47) 9964-8210'}</span>
                        </div>
                        <div className="text-item">
                            <span>Telefone</span>
                            <span>{'+55 (47) 3467-5982'}</span>
                        </div>
                    </div>
                </div>
            </div>
        </Help>
    );
}

export default _Help;