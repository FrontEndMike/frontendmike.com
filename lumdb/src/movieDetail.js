import React, { Component } from 'react';

const POSTER_PATH = 'https://image.tmdb.org/t/p/original';

class movieDetail extends Component {
    state = {
        movie: {},
}
  
async componentDidMount() {
    try {
      const res = await fetch(`https://api.themoviedb.org/3/movie/${this.props.match.params.id}?api_key=a62fd138fc3adf6aa51790c63f1f498e&language=en-US`);
      const movie = await res.json();
      this.setState({
          movie,
      });
    } catch(e){
    console.log(e);
    }
}
    
	render() {
    return (
      <div>
          <img src={`${POSTER_PATH}${this.state.movie.backdrop_path}`} alt={this.state.movie.title} />
          <h1>{this.state.movie.title}</h1>
          <h3>{this.state.movie.release_date}</h3>
          <p>{this.state.movie.overview}</p>
      </div>
    );
  }
}

export default movieDetail;
