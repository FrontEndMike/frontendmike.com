import React, { Component } from 'react';

const BACKDROP_PATH = 'https://image.tmdb.org/t/p/original';
const POSTER_PATH = 'http://image.tmdb.org/t/p/w154';

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
    const { movie } = this.state;
    return (
      <div>
          <img src={`${BACKDROP_PATH}${movie.backdrop_path}`} alt={movie.title} />
          <img src={`${POSTER_PATH}${movie.poster_path}`} alt={movie.title} />>
          <h1>{movie.title}</h1>
          <h3>Release Date: {movie.release_date}</h3>
          <p>Summary: {movie.overview}</p>
      </div>
    );
  }
}

export default movieDetail;
