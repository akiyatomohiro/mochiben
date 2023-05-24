import Axios from 'axios'

const axios = Axios.create({
    // baseURL: 'http://laravel-local:8000',
    baseURL: 'http://localhost:8000',
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
    },
    withCredentials: true,
})

export default axios
