import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class EventBookerType extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header"></div>

                            <div className="card-body">I'm an Event Booker Type component!</div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('event-booker-type')) {
    ReactDOM.render(<EventBookerType />, document.getElementById('event-booker-type'));
}
