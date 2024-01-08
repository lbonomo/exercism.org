use std::collections::HashSet;

pub fn anagrams_for<'a>(word: &str, possible_anagrams: &[&'a str]) -> HashSet<&'a str> {

    let mut s_word: Vec<char> = word.to_lowercase().chars().collect();
    s_word.sort_unstable();

    println!("{:?}", s_word);

    // for w in possible_anagrams.iter() {
    //     if word = w {
            
    //     } else if s_word = w.sort_unstable() {

    //     }
    // }

    HashSet::from_iter(possible_anagrams.iter().cloned())
}
