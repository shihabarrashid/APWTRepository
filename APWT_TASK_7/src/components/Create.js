import { useState } from "react";
import http from "../http";
import {useNavigate} from "react-router-dom";

export default function Create(){
    const navigate = useNavigate();
    const [inputs, setInputs] = useState({});
    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;
        setInputs (values => ({...values,[name]:value}))
    }

    const submitForm = () => {
        http.post('/users',inputs).then((res) => {
            navigate('/');
        })
    }

    return (
        <div>
            <h2>New Tutor</h2>

            <div className="row">
                <div className="col-sm-6">
                <div className="card p-4">

                    <label>Name</label>
                    <input type="text" name="name" className="form-control mb-2"
                        value={inputs.name ||''}
                        onChange={handleChange}
                    ></input>

                    <label>Email</label>
                    <input type="email" name="email" className="form-control mb-2"
                        value={inputs.email ||''}
                        onChange={handleChange}
                    ></input>

                    <label>Password</label>
                    <input type="password" name="password" className="form-control mb-2"
                        value={inputs.password ||''}
                        onChange={handleChange}
                    ></input>

                    <button type="button" onClick={submitForm}  className="btn btn-info mt-2">Submit</button>
                </div>

                </div>


            </div>
        </div>
    )
}