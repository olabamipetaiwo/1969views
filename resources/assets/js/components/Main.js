import React, { Fragment } from 'react';
import ReactDOM from 'react-dom';
import Navbar from './layouts/Navbar';
import { Provider } from 'react-redux';
import store from '../store'; 


const Main = () => {
    return (
        <Provider store={store}>
            <Fragment>
                <Navbar />
                <h2>All Products gere</h2>
            </Fragment>
        </Provider>
    );
}
 
export default Main;
 
 

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}