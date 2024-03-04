## Push Kode ke Github
Perintah git push digunakan untuk mengirimkan perubahan (commit) yang telah Anda buat pada branch lokal ke remote repository.

```
git init
git add .
git commit -m "push"
git push origin main
```

## Pull Kode dari Github
Perintah git pull digunakan untuk mengunduh perubahan terbaru dari remote repository dan secara bersamaan menggabungkan perubahan tersebut ke branch lokal Anda di Git.

```
git pull
```

## Merge kode dari main ke branch_A
Perintah git merge digunakan untuk menggabungkan perubahan dari satu branch ke branch lain dalam Git.

```
git branch      // pastikan sudah berada di branch_A
git merge main  // menggabungkan perubahan dari main ke branch_A
```

## Membuat Branch
Perintah git checkout -b branch_a dalam Git digunakan untuk membuat branch baru bernama "branch_a" dan secara bersamaan berpindah ke branch tersebut.

```
git checkout -b branch_A
```

## Pindah Branch
Perintah git checkout branch_A dalam Git digunakan untuk berpindah ke branch yang sudah ada bernama "branch_A".

```
git checkout branch_A
``
