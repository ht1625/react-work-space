import React from 'react';
import ReactDOM from 'react-dom';


function User() {
    return (

        <div className="container mt-6">
            <div className="row justify-content-center">
                <div className="col-md-9">
                </div>
            </div>
            <div className="cardd text-center">
                <div className="card-header">
                    <h2>Integrating React JS Component in Laravel</h2>
                </div>
            </div>
            <div className="card-body">I have successfully install React JS on Laravel on Cloudways</div>
        </div>

    );
}

export default User;

if (document.getElementById('user')) {

    ReactDOM.render(<User />, document.getElementById('user'));

}    