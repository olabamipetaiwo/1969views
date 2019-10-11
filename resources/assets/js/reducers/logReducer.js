import {
    GET_LOGS,
    LOGS_ERROR
} from '../actions/types';

const initialState = {
    logs:'taiwo and kenny',
    current:null,
    currentSet:false,
    loading:false,
    error:null
}

export default (state=initialState,action) => {
    switch(action.type) {
        case GET_LOGS:
            return {
                ...state,
                logs:action.payload,
                loading:false
            }      
        case LOGS_ERROR:
            return {
                ...state,
                error:action.payload
            }
        default:
            return state;
    }
}