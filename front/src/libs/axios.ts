import Axios from 'axios'

const axios = Axios.create({
    // baseURL: 'http://laravel-local:8000',
    baseURL: 'https://mochiben.jp/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
    },
    withCredentials: true,
})

export default axios
