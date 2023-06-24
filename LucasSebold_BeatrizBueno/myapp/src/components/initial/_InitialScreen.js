import React from "react";
import image from "./Cal.gif";
import styled from 'styled-components';
import _Header from "E:/trabalho/CRUD-A3-main/CRUD-A3-main/TrabalhoA3/myapp/src/components/header/_Header.js";
import { Link } from 'react-router-dom';

const Container = styled.div`
    .jewelry-image{
        width: 100%;
        height: 966px;
    }
    .box-shop{
        display: flex;
        align-items: center;
        position: absolute;
        top: 50%;
        width: 100%;
        justify-content: center;
        transition: transform 400ms linear;
        .button-shop{
            padding: 20px 50px;
            font-size: 16px;
            background-color: rgba(250, 182, 50, 0);
            font-weight: 600;
            border: 2px solid rgb(255, 255, 255);
            color: rgb(255, 255, 255);
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.5s ease 0s;
            &:hover{
                background-color: #fff;
                color: black;
                transform: scale(1.1);
            }
        }
    }
`;

const _IntialScreen = () => {
    return (
        <Container className="col-sm-12 col-md-12 col-lg-12">
            <_Header />
            <div>
                <img src={image} alt="image" className="jewelry-image" />
            </div>
            <div className="box-shop">
                <Link className="button-shop" to='/produtos'>Comprar</Link>
            </div>
        </Container>
    );
};

export default _IntialScreen;