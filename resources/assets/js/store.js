import {createStore,applyMiddleware} from 'redux';
import {composeWithDevTools} from 'redux-devtools-extension';
import thunk from 'redux-thunk';
import rootReducer from './reducers';

const myLogger = (store) => (next) => (action) => {
    console.log("Logged Action",action);
    next(action)
}

const initialState = {};
const middleware = [myLogger,thunk];

const store = createStore(
    rootReducer,
    initialState,
    composeWithDevTools(applyMiddleware(...middleware))
);

export default store;