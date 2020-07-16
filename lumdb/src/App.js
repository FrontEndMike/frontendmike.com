import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';


import Movie from './movies';

const movies = [
  {
    id: 1,
    title: 'Star Wars',
    desc: 'A space movie'
  },
  {
    id: 2,
    title: 'Spider Man'
  },
  {
    id: 3,
    title: 'Along Came Polly',
    desc: 'A comedy movie'
  },
  {
    id: 4,
    title: '5 Deadly Venoms'
  }
];

class App extends Component {
  state = {
    movies: []
  }

  async componentDidMount() {
    try {
      const res = await fetch('https://api.themoviedb.org/3/discover/movie?api_key=a62fd138fc3adf6aa51790c63f1f498e&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1');
      const movies = await res.json();
      this.setState({
        movies: movies.results
      })
    } catch(e){
      console.log(e);
    }
  }

  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" /> 
        </header>
        {this.state.movies.map(movie => <Movie key={movie.id} movie={movie} overview={movie.overview}/> )}
        </div>
    );
  }
}



export default App;
