//import './App.css';
import _InitialScreen from "./components/initial/_InitialScreen";
import _Card from "./components/list/_Card";
import _Header from "./components/header/_Header";
import _Login from "./components/login/_Login";
import 'bootstrap/dist/css/bootstrap.min.css';
import _Help from './components/help/_Help';

import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"></link>
</head>


function App() {
  return (
    <div className="App">
      <>
        <Router>
          <Routes>
            <Route path='/' element={<_Login />} />
            <Route path='/inicio' element={<_InitialScreen />} />
            <Route path='/produtos' element={<_Card />} />
            <Route path='/ajuda' element={<_Help />} />
          </Routes>
        </Router>
      </>
    </div>
  );
}

export default App;
