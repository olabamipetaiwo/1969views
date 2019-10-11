import {
    GET_LOGS,
    LOGS_ERROR
} from './types';
import Axios from 'axios';

export const getLogs = () => async (dispatch) => {
    try {
        setLoading();
       // const res = await Axios.get("http://localhost:5000/api/log");
        const data = "await res.data.logs";
        dispatch({
            type:GET_LOGS,
            payload:data
        });
    }catch(err) {
        console.log('err',err);
        dispatch({
            type:LOGS_ERROR,
            payload:"An Error occured"
        });
    }
}

