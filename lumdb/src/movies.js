import React, { Component } from 'react';
import PropTypes from 'prop-types';

export default class Movie extends Component{
    static propTypes = {
        movie : PropTypes.shape({
            title: PropTypes.string.isRequired,
        }),
        overview: PropTypes.string
    }

    render() {
        return(
            <div>
                <h3>{this.props.movie.title}</h3>
                <p>{this.props.overview}</p>
            </div>
        )
    }
}

