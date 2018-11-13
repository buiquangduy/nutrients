import axios from 'axios'
import i18n from '@/i18n'

export default {
    /**
     * Send POST http request to API.
     *
     * @param {String} url
     * @param {Object} data
     * @returns {Promise<any>}
     */
    post(url, data) {
        return axios.post(url, data, {params: {
            locale: i18n.locale,
        }})
            .then(response => response.data)
            .catch(response => Promise.reject(response.response.data))
    },

    /**
     * Send GET http request to API.
     *
     * @param {String} url
     * @returns {Promise<any>}
     */
    get(url) {
        return axios.get(url, {params: {
            locale: i18n.locale,
        }})
            .then(response => response.data)
            .catch(response => Promise.reject(response.response.data))
    }
}