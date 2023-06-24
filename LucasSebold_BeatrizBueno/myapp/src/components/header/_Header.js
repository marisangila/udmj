import styled from "styled-components";
import { Link } from 'react-router-dom';

const Header = styled.div`
    display: flex;
    align-items: center;
    background-color: #0c0f0f;
    color: #fff;
    padding: 15px;
    justify-content: space-around;
    a{
        color: #fff;
        text-decoration: none;
        cursor: pointer;
        font-size: 16px;
        transition: transform 400ms linear;
        &:hover{
            transform: scale(1.1);
            text-shadow: 2px 2px 9px #fff;
        }
    }   
`;

const _Header = () => {
    return (
        <Header>
            <Link to='/inicio'>Início</Link>
            <Link to='/produtos'>Produtos</Link>
            <Link to='/ajuda'>Ajuda</Link>
        </Header>
    );
}

export default _Header;