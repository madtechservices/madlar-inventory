<?php


use Illuminate\Support\Facades\Route;

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/inventories', [InventoryController::class, 'index'])->name('inventories.index');
    Route::get('admin/inventories/print', [InventoryController::class, 'printIndex'])->name('inventories.print');
    Route::post('admin/inventories/status', [InventoryController::class, 'status'])->name('inventories.status');
    Route::get('admin/inventories/barcodes', [InventoryController::class, 'barcodes'])->name('inventories.barcodes');
    Route::post('admin/inventories/barcodes', [InventoryController::class, 'barcodesPrint'])->name('inventories.barcodes.print');
    Route::get('admin/inventories/report', [InventoryController::class, 'report'])->name('inventories.report');
    Route::post('admin/inventories/report', [InventoryController::class, 'reportData'])->name('inventories.report.data');
    Route::post('admin/inventories/report/print', [InventoryController::class, 'reportPrint'])->name('inventories.report.print');
    Route::get('admin/inventories/import', [InventoryController::class, 'import'])->name('inventories.import');
    Route::post('admin/inventories/import', [InventoryController::class, 'importStore'])->name('inventories.import.store');
    Route::post('admin/inventories/{model}/approve-item', [InventoryController::class, 'approveItem'])->name('inventories.approve.item');
    Route::get('admin/inventories/api', [InventoryController::class, 'api'])->name('inventories.api');
    Route::get('admin/inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
    Route::post('admin/inventories', [InventoryController::class, 'store'])->name('inventories.store');
    Route::get('admin/inventories/{model}', [InventoryController::class, 'show'])->name('inventories.show');
    Route::get('admin/inventories/{model}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
    Route::post('admin/inventories/{model}/approve', [InventoryController::class, 'approve'])->name('inventories.approve');
    Route::post('admin/inventories/{model}', [InventoryController::class, 'update'])->name('inventories.update');
    Route::delete('admin/inventories/{model}', [InventoryController::class, 'destroy'])->name('inventories.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/refunds', [RefundController::class, 'index'])->name('refunds.index');
    Route::get('admin/refunds/api', [RefundController::class, 'api'])->name('refunds.api');
    Route::post('admin/refunds/orders', [RefundController::class, 'orders'])->name('refunds.orders');
    Route::get('admin/refunds/create', [RefundController::class, 'create'])->name('refunds.create');
    Route::post('admin/refunds', [RefundController::class, 'store'])->name('refunds.store');
    Route::get('admin/refunds/{model}', [RefundController::class, 'show'])->name('refunds.show');
    Route::get('admin/refunds/{model}/edit', [RefundController::class, 'edit'])->name('refunds.edit');
    Route::post('admin/refunds/{model}/status', [RefundController::class, 'status'])->name('refunds.status');
    Route::post('admin/refunds/{model}/approve', [RefundController::class, 'approve'])->name('refunds.approve');
    Route::post('admin/refunds/{model}', [RefundController::class, 'update'])->name('refunds.update');
    Route::delete('admin/refunds/{model}', [RefundController::class, 'destroy'])->name('refunds.destroy');
});


Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/inventory-logs', [InventoryLogController::class, 'index'])->name('inventory-logs.index');
    Route::get('admin/inventory-logs/api', [InventoryLogController::class, 'api'])->name('inventory-logs.api');
    Route::get('admin/inventory-logs/create', [InventoryLogController::class, 'create'])->name('inventory-logs.create');
    Route::post('admin/inventory-logs', [InventoryLogController::class, 'store'])->name('inventory-logs.store');
    Route::get('admin/inventory-logs/{model}', [InventoryLogController::class, 'show'])->name('inventory-logs.show');
    Route::get('admin/inventory-logs/{model}/edit', [InventoryLogController::class, 'edit'])->name('inventory-logs.edit');
    Route::post('admin/inventory-logs/{model}', [InventoryLogController::class, 'update'])->name('inventory-logs.update');
    Route::delete('admin/inventory-logs/{model}', [InventoryLogController::class, 'destroy'])->name('inventory-logs.destroy');
});