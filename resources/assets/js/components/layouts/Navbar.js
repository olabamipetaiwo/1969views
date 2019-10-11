import React, { Component,useEffect } from 'react';
import  { connect } from 'react-redux';
import axios from 'axios';
 

const Navbar = ({log:{logs}}) => {
    const testApi = async () => {
        axios.defaults.headers.common['x-auth-token'] = 'tokenized shit';
        axios.defaults.headers.common['x-exp'] = "Something Random";
        const res = await axios.get("http://localhost:8000/api");
        console.log(res)
        return res;
    }

    useEffect(() => {
        testApi()
    },[]);

    return (
             <div>
                 <h2>This is a functional compom=etn Navbar</h2>
                 <h5>{logs}</h5>
            </div>
     );
}
const mapStateToProps = state => ({
    log:state.log
 })
 

export default connect(mapStateToProps)(Navbar);

 
