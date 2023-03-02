if [%1]==[] goto usage

git add .
git commit -m %1
git pull
git push
:usage
@echo Usage: %0 ^<EnvironmentName^>
exit /B 1
