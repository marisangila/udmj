import styled from "styled-components";
import colar from "./colarprata.png";
import { useEffect } from "react";
import { useState } from "react";
import _Header from "E:/trabalho/CRUD-A3-main/CRUD-A3-main/TrabalhoA3/myapp/src/components/header/_Header.js";

import Button from 'react-bootstrap/Button';

import JewelryApi from "../../controllers/JewelryController";

const Box = styled.div`
     .add-task{
        padding-top: 15px;
        padding-left: 10px;
        .box-add{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
            padding: 15px;
            .fields{
                padding-bottom: 10px;
            }
            button{
                width: 100px;
            }
        }
    }
    .box-card{
        display: grid;
        grid-template-columns: repeat(auto-fill, 310px);
        column-gap: 30px;
        width: 100%;
        place-content: center;
    }
    @media screen and (max-width: 468px){
        .box-card{
            div{
                margin-left: 0px;
            }
        }
    }
`;

const Card = styled.div`
    cursor: pointer;
    display: flex;
    flex-direction: column;
    width: 300px;
    height: 330px;
    align-items: center;
    margin-left: 35px;
    margin-top: 35px;
    border: 1px solid black;
    border-radius: 5px;
    transition: transform 400ms linear;
    .remove-item{
        align-self: end;
        opacity: 0;
    }
    img{
        width: 223px;
        height: 246px;
    }
    .bottom-items{
        display: flex;
        flex-direction: column;
        margin-top: 15px;
        span{
            font-size: 16px;
        }
        span:nth-child(2){
            margin-bottom: 20px;
        }
    }
    &:hover{
        transform: scale(1.1);
        .remove-item{
            opacity: 1;
        }
    }
`;

const _Card = () => {
    const [state, setState] = useState({
        jewelries: [],
        jewelryName: '',
        jewelryPrice: '',
        email: '',
        password: '',
        update: false,
        itemId: 0,
        jewelryId: 0
    });
    const { jewelries, jewelryName, jewelryPrice, jewelryId } = state;

    useEffect(() => {
        getJewelries();
    }, []);

    const getJewelries = async () => {
        const data = await JewelryApi.Jewelries()
        setState((prevState) => ({ ...prevState, jewelries: data }));
    };

    const onCreateJewelry = async () => {
        if (!state.update) {
            return await JewelryApi.createJewelry({ jewelryName, jewelryPrice })
                .then(() => {
                    getJewelries()
                    setState((prevState) => ({ ...prevState, jewelryName: '', jewelryPrice: '' }));
                })
                .catch((err) => { throw new Error(err) });
        }
        else {
            return await JewelryApi.updateJewelry(state.itemId, { jewelryId, jewelryName, jewelryPrice })
                .then(() => {
                    getJewelries()
                    setState((prevState) => ({ ...prevState, update: false, jewelryName: '', jewelryPrice: '' }));
                })
                .catch((err) => { throw new Error(err) });
        }
    };

    const removeItem = async (item) => {
        return await JewelryApi.removeJewelry(item.jewelryId)
            .then(() => {
                getJewelries()
            })
            .catch((err) => { throw new Error(err) });
    }

    const updateItem = (item) => {
        setState((prevState) => ({
            ...prevState,
            jewelryName: item.jewelryName,
            jewelryPrice: item.jewelryPrice,
            jewelryMaterial: item.material,
            jewelryGender: item.gender,
            update: true,
            itemId: item.jewelryId,
            jewelryId: item.jewelryId
        }));
    }

    const nameOnChange = (e) => setState((prevState) => ({ ...prevState, jewelryName: e.target.value }));

    const priceOnChange = (e) => setState((prevState) => ({ ...prevState, jewelryPrice: e.target.value }));

    return (
        <Box className="col-sm-12 col-md-12 col-lg-12">
            <_Header />
            <div className="add-task">
                <div className="box-add">
                    <div className="fields">
                        <span>Nome</span>
                        <input
                            type='text'
                            onChange={nameOnChange}
                            value={jewelryName}
                        />
                    </div>
                    <div className="fields">
                        <span>Preço</span>
                        <input
                            type='text'
                            onChange={priceOnChange}
                            value={jewelryPrice}
                        />
                    </div>
                    <Button variant="primary" onClick={onCreateJewelry}>{state.update ? 'Atualizar' : 'Criar'}</Button>
                </div>
            </div>
            <div className="box-card col-sm-12 col-md-12 col-lg-12">
                {
                    jewelries.map(item => {
                        return (
                            <Card onClick={() => updateItem(item)} className="col-sm-12 col-md-12 col-lg-12">
                                <i className="material-icons remove-item" onClick={(e) => {
                                    e.stopPropagation();
                                    removeItem(item);
                                }}>delete</i>
                                <img src={colar} />
                                <div className="bottom-items">
                                    <span>{item.jewelryName}</span>
                                    <span>{`R$ ${item.jewelryPrice}`}</span>
                                </div>
                            </Card>
                        );
                    })
                }
            </div>
        </Box>
    );
}

export default _Card;