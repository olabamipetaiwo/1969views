import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Navbar from './layouts/Navbar'
 


class Main extends Component {
    render() {
        return (
            <div>
                <Navbar />
                <h2>All Products gere</h2>
            </div>
        );
    }
}
 
export default Main;
 
 

if (document.getElementById('root')) {
    ReactDOM.render(<Main />, document.getElementById('root'));
}