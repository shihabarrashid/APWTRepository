import './App.css';
import "bootstrap/dist/css/bootstrap.min.css";
import {Routes, Route, Link} from "react-router-dom";
import Home from './components/Home'
import Create from './components/Create'
import Edit from './components/Edit'
import View from './components/View'

function App() {
  return (
    <div>
      <nav className='navbar navbar-expand navbar-dark bg-primary'>
        <div className='navbar-nav mr-auto'>
          <li className='nav-item'>
            <Link to ={"/"} className="nav-link">Home</Link>
          </li>

          <li className='nav-item'>
            <Link to ={"/create"} className="nav-link">Create</Link>
          </li>

        </div>
      </nav>

      <div className='container'>
        <Routes>
          <Route path='/' element={<Home/>}> </Route>
          <Route path='/create' element={<Create/>}> </Route>
          <Route path='/edit/:id' element={<Edit/>}> </Route>
          <Route path='/view/:id' element={<View/>}> </Route>
        </Routes>

      </div>
    </div>
  );
}

export default App;
