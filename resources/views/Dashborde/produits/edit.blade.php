@extends('Dashborde.layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Marque</title>
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: "Inter", Arial, Helvetica, sans-serif;
      }
      .formbold-mb-5 {
        margin-bottom: 20px;
      }
      .formbold-pt-3 {
        padding-top: 12px;
      }
      .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
      }
    
      .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 550px;
        width: 100%;
        background: white;
      }
      .formbold-form-label {
        display: block;
        font-weight: 500;
        font-size: 16px;
        color: #07074d;
        margin-bottom: 12px;
      }
      .formbold-form-label-2 {
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 20px;
      }
    
      .formbold-form-input {
        width: 100%;
        padding: 12px 24px;
        border-radius: 6px;
        border: 1px solid #e0e0e0;
        background: white;
        font-weight: 500;
        font-size: 16px;
        color: #6b7280;
        outline: none;
        resize: none;
      }
      .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
      }
    
      .formbold-btn {
        text-align: center;
        font-size: 16px;
        border-radius: 6px;
        padding: 14px 32px;
        border: none;
        font-weight: 600;
        background-color: #6a64f1;
        color: white;
        width: 100%;
        cursor: pointer;
      }
      .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
      }
    
      .formbold--mx-3 {
        margin-left: -12px;
        margin-right: -12px;
      }
      .formbold-px-3 {
        padding-left: 12px;
        padding-right: 12px;
      }
      .flex {
        display: flex;
      }
      .flex-wrap {
        flex-wrap: wrap;
      }
      .formbold-file-input input {
    opacity: 0;
    position: relative;
    width: 100%;
    height: 100%;
}

.formbold-file-input label {
    position: relative;
    border: 1px dashed #e0e0e0;
    border-radius: 6px;
    min-height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
    text-align: center;
}

.formbold-drop-file {
    display: block;
    font-weight: 600;
    color: #07074d;
    font-size: 20px;
    margin-bottom: 8px;
}

.formbold-or {
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    display: block;
    margin-bottom: 8px;
}

.formbold-browse {
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    display: inline-block;
    padding: 8px 28px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
}

      .w-full {
        width: 100%;
      }
      @media (min-width: 540px) {
        .sm\:w-half {
          width: 50%;
        }
      }
    </style>
</head>
<body>

  <div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <form method="POST" action="{{ route('produits.update', $produit->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="formbold-mb-5 formbold-pt-3">
                <label class="formbold-form-label formbold-form-label-2">
                    Edit Produits
                </label>
                <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <input type="number" name="codebarre" id="codebarre" value="{{ $produit->codebarre }}"
                                placeholder="Enter codebarre" class="formbold-form-input" />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <input type="text" name="designation" id="designation"
                                value="{{ $produit->designation }}" placeholder="Enter designation"
                                class="formbold-form-input" />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <input type="number" name="prix_ht" id="prix_ht" value="{{ $produit->prix_ht }}"
                                placeholder="Enter prix_ht" class="formbold-form-input" />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <input type="number" name="tva" id="tva" value="{{ $produit->tva }}"
                                placeholder="Enter tva" class="formbold-form-input" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="formbold-mb-5">
                <label for="description" class="formbold-form-label"> Description </label>
                <textarea rows="6" name="description" id="description" placeholder="Enter description"
                    class="formbold-form-input">{{ $produit->description }}</textarea>
            </div>

            <div class="formbold-mb-5 formbold-file-input">
              <input type="file" name="image" id="image" />
              <label for="image">
                  <div>
                      <span class="formbold-drop-file">Drop image here</span>
                      <span class="formbold-or">Or</span>
                      <span class="formbold-browse">Browse</span> <!-- Changed "Browser" to "Browse" -->
                  </div>
              </label>
          </div>

            <div class="formbold-mb-5">
                <label for="famille_id" class="formbold-form-label">
                    Famille:
                </label>
                <select name="sous_famille_id" id="sous_famille_id" class="formbold-form-input">
                    <option value="">Select sous famille</option>
                    @foreach ($sousFamilles as $sousFamille)
                    <option value="{{ $sousFamille->id }}" {{ $sousFamille->id == $produit->sous_famille_id ?
                        'selected' : '' }}>
                        {{ $sousFamille->libelle }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="formbold-mb-5">
                <label for="marque_id" class="formbold-form-label">
                    Marque:
                </label>
                <select name="marque_id" id="marque_id" class="formbold-form-input">
                    <option value="">Select marques</option>
                    @foreach ($marques as $marque)
                    <option value="{{ $marque->id }}" {{ $marque->id == $produit->marque_id ? 'selected' : '' }}>
                        {{ $marque->marque }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="formbold-mb-5">
                <label for="unite_id" class="formbold-form-label">
                    Unites:
                </label>
                <select name="unite_id" id="unite_id" class="formbold-form-input">
                    <option value="">Select unites</option>
                    @foreach ($unites as $unite)
                    <option value="{{ $unite->id }}" {{ $unite->id == $produit->unite_id ? 'selected' : '' }}>
                        {{ $unite->unite }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div>
                <button type="submit" class="formbold-btn w-full">Update Produits</button>
            </div>
        </form>
    </div>
</div>


</body>
</html>
@endsection
