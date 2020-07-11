import React, { Component } from 'react';

export default class Movie extends Component{
    render() {
        return(
            <div>
                <h3>{this.props.movie.title}</h3>
                <p>{this.props.movie.desc}</p>
            </div>
        )
    }
}